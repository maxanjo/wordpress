<?php
require_once( get_template_directory() . '/inc/functions.admin.php');
$option_data = get_option(''.$settings['id'].'');
                     $array = explode(', ', $option_data);
                     $select = searchInArray($settings, "web_select");
                     $search_select = searchInArray($settings, "web_search_select");
                     $text = searchInArray($settings, "web_text");
                     $color = searchInArray($settings, "web_color");
                     $number = searchInArray($settings, "web_number");
                     $checkbox = searchInArray($settings, "web_checkbox");
                     $file = searchInArray($settings, "web_file");
                     $textarea = searchInArray($settings, "web_custom_textarea");
                     if($select){
                        echo '<td>';
                        echo '  <div class="form-group">
                        <label for="">'.$settings['label'].'</label>
                        <div class="dropdown parent">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">' . $array[1] .  '  
                        <span class="caret"></span>
                        </button>
                        <ul class="'.$settings['id'].' dropdown-menu" data-web-attr role="menu" aria-labelledby="dropdownMenu1">
                        ';
                        foreach($settings['options'] as $key => $value){
                            echo '<li role="presentation"><a role="menuitem" data-value="'.$key.', '.$value.'" tabindex="-1" href="#">'.$value.'</a></li>';
                        }; 
                        echo '</ul>
                        </div>
                        </div>
                        <input type="hidden" id="'.$settings['id'].'" name="'.$settings['id'].'" value="' . $option_data . '">
                        </td>';             
                    }elseif($search_select){
                        echo '<td>';
                         echo '  <div class="form-group">
                        <label for="'.$settings['id'].'">'.$settings['label'].'</label>

                        <div class="dropdown parent">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">' . $array[1] .  '  
                        <span class="caret"></span>
                        </button>
                        <ul class="'.$settings['id'].' dropdown-menu dropdown-with-search" data-web-attr role="menu" aria-labelledby="dropdownMenu1">
                        ';
                        foreach($settings['options'] as $key => $value){
                            echo '<li role="presentation"><a role="menuitem" data-value="'.$key.', '.$value.'" tabindex="-1" href="#">'.$value.'</a></li>';
                        }; 
                        echo '</ul>
                        </div>
                        </div>
                        <input type="hidden" id="'.$settings['id'].'" name="'.$settings['id'].'" value="' . $option_data . '">
                        </td>';             
                    }elseif($color){
                        echo '<td>';
                        echo ' <div class="form-group">
                        <label for="'.$settings['id'].'">'.$settings['label'].'</label>
                        <input type="text" id="'.$settings['id'].'" name="'.$settings['id'].'" class="form-control color-picker '.$settings['id'].'" data-control="hue" value="' . $option_data . '">
                        </div>';
                        echo '</td>';
                    }elseif($text){
                        echo '<td>';
                        echo '<div class="form-group">
                        <input type="text" id="'.$settings['id'].'" name="'.$settings['id'].'" class="form-control '.$settings['id'].'" placeholder="'.$settings['placeholder'].'" value="' . $option_data . '">';
                        echo '</td>';
                    }
                    elseif($number){
                        echo '<td>';
                        echo '<div class="form-group">
                        <label for="'.$settings['id'].'">'.$settings['label'].'</label>
                        <input type="number" id="'.$settings['id'].'" name="'.$settings['id'].'" class="form-control '.$settings['id'].'" placeholder="'.$settings['placeholder'].'" value="' . $option_data . '">';
                        echo '</td>';
                    }elseif($checkbox){
                        $checked = ($option_data == '1' ? "checked" : '');
                        echo '<td>';
                        echo '<div class="form-group">
                        <label for="'.$settings['id'].'">'.$settings['label'].'</label>
                        <input type="checkbox"  name="'.$settings['id'].'" id="'.$settings['id'].'" value="1" ' .$checked. ' />';
                        echo '</td>';
                    }elseif($file){
                        echo '<td>';
                        echo '
                        <div class="web-preview">
                            <div id="'.$settings['id'].'" class="web-image-preview" style="background-image: url('. $option_data .') ">
                            </div>
                        </div>
                        <input type="button" value="' . $settings['button'] .'" class="button button-secondary web-media-uploader">
                        <input type="button" value="'.__('Remove', 'webove') . '" class="button  button-secondary button-danger remove-file" id="remove-'.$settings['id'].'">
                        <input type="hidden"  id="'.$settings['id'].'" name="'.$settings['id'].'" value="' . $option_data . '" >';
                        echo '<p class="description">' . $settings['desc'] .'</p>';
                        echo '</td>';
                    }else if($textarea){
                         echo '<td>';
                         echo '<textarea rows="8"  class="copyright-text '.$settings['id'].'"  id="'.$settings['id'].'" name="'.$settings['id'].'" value="'. $option_data .'" >'. $option_data .'</textarea>';
                         echo '</td>';
                    }
?>