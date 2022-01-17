<?php
$title = "JSM33T - Discography";
$description = "Collection of all bootlegs and stuff";
$logo = "white";
$music = "active";


include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";

?>      
            <main id="main">
            <section class="home-section bg-dark-alfa-70 parallax-2 fixed-height-small" data-background="cover.webp" id="home">
                    <div class="js-height-parent container">
                        
                        <!-- Hero Content -->
                        <div class="home-content">
                            <div class="home-text">
                                
                                <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                                    Bootlegs / Originals / Projects
                                </h1>
                                
                                <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                                    DISCOGRAPHY
                                </h2>
                                
                                <div class="local-scroll">
                                    <a href="https://www.youtube.com/watch?v=I6jmZ5plZ3o" class="btn btn-mod btn-border-w btn-medium btn-round d-none d-sm-inline-block lightbox mfp-iframe">YOUTUBE</a>
                                    <span class="d-none d-sm-inline-block">&nbsp;</span>
                                    <a href="#menu" class="btn btn-mod btn-border-w btn-medium btn-round ">DOWNLOAD</a>
                                </div>
                                
                            </div>
                        </div>
                        <!-- End Hero Content -->
                        
                    </div>
                </section>

             <!-- Menu Section -->
             <section class="page-section" id="menu">
                    <div class="container relative">                    
                            
                        <!-- Row -->
                        <div class="row">
                            <!-- Col -->
                            <div class="col-lg-8 offset-lg-2">
                                
                                <!-- Nav Tabs -->
                                <div class="align-center mb-40 mb-xs-30">
                                    <ul role="tablist" class="nav nav-tabs tpl-minimal-tabs animate">
                                        <li>
                                            <a href="#mini-one" aria-controls="mini-one" class="nav-link active" data-bs-toggle="tab" role="tab" aria-selected="false">BOOTLEGS</a>
                                        </li>
                                        <li>
                                            <a href="#mini-two" aria-controls="mini-two" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">ORIGINALS</a>
                                        </li>
                                        <li>
                                            <a href="#mini-three" aria-controls="mini-three" class="nav-link" data-bs-toggle="tab" role="tab" aria-selected="false">ZIPS</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Nav Tabs -->
                <?php
                
                $path = $_SERVER['DOCUMENT_ROOT'] . "/database/discography.xml";
                $xmlfile = file_get_contents($path);
                $new = simplexml_load_string($xmlfile);
                $con = json_encode($new);
                $json = json_decode($con, true);
                ?>
                                <!-- Tab panes -->
                                <div class="tab-content section-text">
                                    <div role="tabpanel" class="tab-pane fade show active" id="mini-one">
                                        
                                        <table class="table table-hover">
                                            
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Bootlegs
                                                    </th>
                                                    <th style="width:20%;">
                                                    </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php
                                               
                                        foreach($json as $elem)  
                                        {
                                            for ($x = 0; $x < count($elem[0]['menu']); $x++) 
                                            {
                                              echo "<tr><td>";
                                              echo $elem[0]['menu'][$x]['title'];
                                                echo "<div class='small'>";
                                                echo $elem[0]['menu'][$x]['desc'];
                                                 echo "</div></td><td class='align-right'>";
                                                 //echo $elem[0]['menu'][$x]['link'];
                                                 echo "<a href='". $elem[0]['menu'][$x]['link'] ."' class='btn btn-mod btn-circle btn-small'>DOWNLOAD</a>";
                                                 echo "</td></tr>";
                                            }
                                        }
                                              ?>    

                                            </tbody>
                                        </table>
                                        
                                      
                                     
                                        
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="mini-two">
                                        
                                        <table class="table table-hover">
                                            
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Originals
                                                    </th>
                                                    <th style="width:20%;">
                                                    </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                                
                                            <?php
                                               
                                               foreach($json as $elem)  
                                               {
                                                   for ($x = 0; $x < count($elem[0]['menu']); $x++) 
                                                   {
                                                     echo "<tr><td>";
                                                     echo $elem[1]['menu'][$x]['title'];
                                                       echo "<div class='small'>";
                                                       echo $elem[1]['menu'][$x]['desc'];
                                                        echo "</div></td><td class='align-right'>";
                                                        echo "<a href='". $elem[1]['menu'][$x]['link'] ."' class='btn btn-mod btn-circle btn-small'>DOWNLOAD</a>";
                                                        echo "</td></tr>";
                                                   }
                                               }
                                                     ?>    
                                           
                                                
                                            </tbody>
                                        </table>
                                        
                                       
                                        
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade" id="mini-three">
                                        
                                        <table class="table table-hover">
                                            
                                            <thead>
                                                <tr>
                                                    <th>
                                                       Download ZIPS
                                                    </th>
                                                    <th style="width:20%;">
                                                    </th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>
                                            <?php
                                               
                                               foreach($json as $elem)  
                                               {
                                                   for ($x = 0; $x < count($elem[0]['menu']); $x++) 
                                                   {
                                                     echo "<tr><td>";
                                                     echo $elem[2]['menu'][$x]['title'];
                                                       echo "<div class='small'>";
                                                       echo $elem[2]['menu'][$x]['desc'];
                                                        echo "</div></td><td class='align-right'>";
                                                        echo "<a href='". $elem[2]['menu'][$x]['link'] ."' class='btn btn-mod btn-circle btn-small'>DOWNLOAD</a>";
                                                        echo "</td></tr>";
                                                   }
                                               }
                                                     ?>    
                                                
                                               
                                                
                                            </tbody>
                                        </table>
                                        
                                       
                                        
                                    </div>
                                </div>
                                
                                <!-- Button -->
                                <div class="mt-40 align-right">
                                    <a href="#" class="btn btn-mod btn-gray btn-small btn-circle"><i class="fa fa-cloud-download"></i> Download Menu</a>
                                </div>
                                <!-- End Button -->
                                
                            </div>
                            <!-- End Col -->
                            
                        </div>
                        <!-- End Row -->
                        
                            
                    </div>
                </section>
                <!-- End Menu Section -->
             
       

            </main>

            
         <?php

include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php";
          
         ?>