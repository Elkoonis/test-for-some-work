<?php
                   $video_ID = '9bZkp7q19f0';
                   $JSON = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id={$video_ID}&key=AIzaSyDahgcT_1FHZNvcinpcL6C1_1X20kBf0pI&part=statistics");
                   $JSON_Data = json_decode($JSON);
                   $statatistic = $JSON_Data->items[0]->statistics;
                   $views = $statatistic->viewCount;
                   echo $views;
               ?>