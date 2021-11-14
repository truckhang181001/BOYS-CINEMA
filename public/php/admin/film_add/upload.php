<?php

function uploadImage($itemID ,$itemName = "untitle", $itemPOST, $itemType)
{
    $multi = count($_FILES[$itemPOST]['name']);
    if ($multi > 0) {
        for ($i = 0; $i < $multi; $i++) {
            //Variable
            $fileType = strtolower(pathinfo(basename($_FILES[$itemPOST]["name"]), PATHINFO_EXTENSION));
            $fileID = "_" . round(microtime(true));
            $target_dir = __DIR__ . "/../../../$itemType/";
            $target_file = $target_dir . $itemName . $fileID . "." . $fileType;

            $allowUpload = true;
            $allowType = [
                "video" => ["mp4", "mov"],
                "img" => ["jpg", "jpeg", "png", "gif"]
            ];
            $allowSize = [
                "video" => 300000 * 1000,
                "img" => 5000 * 1000
            ];

            if (!in_array($fileType, $allowType[$itemType])) {
                echo "Không đúng định dạng";
                $allowUpload = false;
            }

            if ($_FILES[$itemPOST]["size"] > $allowSize[$itemType]) {
                echo "Sorry, your file is too large.";
                $allowUpload = false;
            }

            if ($allowUpload == false) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES[$itemPOST]["tmp_name"], $target_file)) {
                    echo basename($_FILES[$itemPOST]["name"]) . "was uploaded";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            return basename($target_file);
        }
    }
}
