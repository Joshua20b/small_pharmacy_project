<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

trait ImageUploadTrait
{
    public function uploadImage(Request $request, $inputName, $path)
    {
        if ($request->hasFile($inputName)) {

            $user = User::findOrFail(Auth::user()->id);

            $image = $request->{$inputName};

            $imageName = time() . '_' . rand() . '.' . $image->extension();

            $image->move(public_path($path), $imageName);

            return $path . $imageName;
        }
    }
    public function removeImage($oldPath)
    {
        // Remove the previously uploaded file.
        if (File::exists(public_path($oldPath))) {

            File::delete(public_path($oldPath));
        }
    }
    public function updateImage(Request $request, $inputName, $path, $oldPath)
    {
        if ($request->hasFile($inputName)) {

            $this->removeImage($oldPath);

            $image = $request->{$inputName};

            $imageName = time() . '_' . rand() . '.' . $image->extension();

            $image->move(public_path($path), $imageName);

            return $path . $imageName;
        }
    }
    public function imageInterventionUploadImage($request, $inputName, $path, $width, $height)
    {
        if ($request->hasFile($inputName)) {
            $file = $request->file($inputName);

            $directory = public_path($path);

            if (!is_dir($directory)) {

                mkdir($directory, 0777, true);
            }

            $generatedName = time() . '_' . rand() . '.' . $file->extension();

            $image = Image::make($file)->resize($width, $height);

            $image->save($directory . $generatedName);


            return $path . $generatedName;
        }
    }
    public function imageInterventionUpdateImage($request, $inputName, $path, $width, $height, $oldImage)
    {
        if ($request->hasFile($inputName)) {
            $this->removeImage($oldImage);

            $file = $request->file($inputName);

            $directory = public_path($path);

            if (!is_dir($directory)) {
                mkdir($directory, 0777, true);
            }

            $generatedName = time() . '_' . rand() . '.' . $file->extension();

            $image = Image::make($file)->resize($width, $height);

            $image->save($directory . $generatedName);

            return $path . $generatedName;
        }
    }
}
