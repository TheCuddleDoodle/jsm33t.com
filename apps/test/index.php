
<?php
$title = "Home";
$description = "Basic flex stuffs and all";
$logo = "black";
$apps = "active";
include $_SERVER['DOCUMENT_ROOT'] . "/includes/head.php";
?>  


<main>

   <section class="page-section bg-light parallax-6 bg-light-alfa-90"id="menu"data-background="/svg/sprinkle.svg">
		    <div class="container relative">
			<h2 class="font-alt mb-70 mb-sm-40 section-title">URBAN DICT.</h2>
		
								<div class="row">
                  <div class="col-sm-12 mb-40">
                  <form method="post" action="#" id="form" class="form">
                  <div class="col-sm-10 mb-40">
                                <input type="text" name="word" class="input-md form-control"  placeholder="ENTER THE KEYWORD">
                  </DIV>
                  <div class="col-sm-2 mb-40">                                

                                <button type="submit" name="submit" onclick="showDiv()" class="btn btn-mod btn-medium btn-circle" ><i class="fa fa-search"></i>&nbsp; FIND </button>
      
</div>
                  </form>
                  </div>
                  <div class="col-sm-12 mb-40">
                  <div class="widget">

                                    <?php
error_reporting(0);
if(isset($_POST['submit'])) 
{
    $word = $_POST['word'];
        
        $filepath = "https://api.urbandictionary.com/v0/define?term=" . $word ;
        $json_string = file_get_contents($filepath);
        $json = json_decode($json_string, true);
        ?><div id="welcomeDiv"  style="display:none;" class="answer_list" ><div class="spinner-border" role="status"><span class="sr-only">Loading...</span></div></div><?php
       
	//	if($elem[0] != 0)
	//	{
		
			foreach($json as $elem)  
			{
				
        

        echo "<h5 class='widget-title font-alt'><b>".count($elem)." </b>results found for <b>".$elem[0]['word']."</b></h5><div class='widget-body'> ";
			
					for ($x = 0; $x < count($elem); $x++) 
					{
						echo "<a><b>".($x+1).".</b>&nbsp;".( $elem[$x]['definition']). "<br>";
						echo "<b> Example</b>&nbsp;".( $elem[$x]['example']). "</br>";
						echo "<a><div class='tags'><i class='fa fa-thumbs-up'></i>&nbsp;".( $elem[$x]['thumbs_up'])."</a>&nbsp;";
						echo "<a><i class='fa fa-thumbs-down'></i>&nbsp;".( $elem[$x]['thumbs_down']). "</a></a></div></br>";
						echo "</br>";
            
					}

				
			}
	//	}
	
      
    }
    
?>
                        
                 

                                        </div>
                                    </div>
                                    
                                </div>
                
                  </div>	
                </div>    	
                                </div>
                                
                            </div>
                            
                            <!-- End Col -->                        
                            
                        </div>
                        <!-- End Story -->          
			
		  </div>
</section>

</main>

            
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/includes/foot.php";
?>
