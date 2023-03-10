<?php

namespace App\Controllers;

use PHPUnit\Util\Type;

class Image extends BaseController
{
    public function index()
    {
        helper(['form', 'image']);

        $data = [];
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'theFile' => [
                    'rules' => 'uploaded[theFile.0]|is_image[theFile]',
                    'label' => 'The File',
                ],
            ];
            
            if($this->validate($rules)){

                // $file = $this->request->getFile('theFile');
                
                // if($file->isValid() && !$file->hasMoved()){
                //     $file->move('./uploads/images', $file->getRandomName());
                // }
                
                $path = './uploads/images/manipulated/';
                $files = $this->request->getFiles();

                $imageService = service('image');

                foreach ($files['theFile'] as $file) {
                    if($file->isValid() && !$file->hasMoved()){

                    $file->move($path);
                    $fileName = $file->getName();
                    $data['image'] = $fileName;

                    $this->imageManipulation($path,'thumb', $fileName, $imageService);
                    $data['folders'][] = 'thumb';
                    $this->imageManipulation($path,'flip', $fileName, $imageService);
                    $data['folders'][] = 'flip';
                    $this->imageManipulation($path,'rotate', $fileName, $imageService);
                    $data['folders'][] = 'rotate';
                    // $this->imageManipulation($path,'horizontal', $fileName, $imageService);

                
                
                //Then do database insertion
                //Login User
            }else {
                $data['validation'] = $this->validator;
            }
        }
    }
}




        return view('image', $data); 
    }

    private function imageManipulation($path, $folder, $fileName, $imageService)
    {
        $savePath = $path. '/' . $folder;
        if(!file_exists($savePath))
            mkdir($savePath, 755);

            $imageService->withFile(src($fileName));

            switch($folder){
                case 'thumb':
                    $imageService->fit(150,150);
                    break;
                case 'flip':
                    $imageService->flip('horizontal');
                    $imageService->fit(200,130, 'top-right');
                    break;
                case 'rotate':
                    $imageService->rotate(90);
                    break;

            }

            return $imageService->save($savePath . '/' . $fileName);
        

    }

}
