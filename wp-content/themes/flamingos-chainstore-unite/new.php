                                  <?php
                                    $days = 8; //Newを表示させたい期間の日数
                                    $today = date_i18n('U');
                                    $entry = get_the_modified_date('U');
                                    $kiji = date('U',($today - $entry)) / 86400 ;
                                    if( $days > $kiji ){
                                    echo '<span class="new-icon">NEW !</span>';
                                    }
                                    ?>