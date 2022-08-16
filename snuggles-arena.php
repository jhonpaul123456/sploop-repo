<?php include_once("php/connect.php"); ?>
<?php include_once("php/item.php"); ?>




<!-- REMOVED -->

<!-- <?php
        $embed = "";
        $primary_title = "";
        $secondary_title = "";
        $link_board = "";
        $sql_query_live_stream = "select id,link from live_stream order by id ";
        $live_stream = $con->query($sql_query_live_stream) or dir($con->error);
        while ($row = $live_stream->fetch_assoc()) {
            if ($row["id"] == 1) {
                // link
                $embed = $row["link"];
            } elseif ($row["id"] == 2) {
                //primary
                $primary_title = $row["link"];
            } elseif ($row["id"] == 3) {
                //secondary
                $secondary_title = $row["link"];
            }
        }

        $sql_query_leader_board = "select link from leader_board order by id desc limit 1";
        $leader_board = $con->query($sql_query_leader_board) or dir($con->error);
        if ($row = $leader_board->fetch_assoc()) {
            $link_board = $row["link"];
        }

        ?> -->

<!-- REMOVED -->





<!DOCTYPE html>
<html lang="en">
<?php
include_once("head.php");
?>


<style>

</style>

<body>
    <?php
    include_once("header.php");
    include_once("nav-mobile.php");
    ?>

    <!-- END: Navbar Mobile -->
    <!-- <div class="nk-main">      
            <div class="nk-gap-2"></div>     
       
          
                  <p class="h3 text-center">
                  <?php echo $primary_title; ?><span class="text-main-1"> <?php echo $secondary_title; ?></span> 
</p>
        <div class="videoWrapper col-lg-12 col-md-12 col-sm-12 col-6  text-center">     
             <?php echo $embed; ?>       
        </div>
    
        </div>
        <div class="nk-gap"></div>  
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
    
                        <iframe src="<?php echo $link_board; ?>" width="100%" height="980" frameborder="0" scrolling="auto" allowtransparency="true"></iframe>
                       
                        
                        
        </div> -->

    <div style="margin: 0 auto;" class="text-center">
        <img src="assets/images/snuggles-1_500.png" alt="" style="width: auto; max-height: 200;">

        <p class="h4 text-center intro-snuggles">

            WELCOME TO THE <span class="text-main-1"> NEW SNUGGLES ARENA!</span>
        </p>
    </div>

    <div class="nk-gap-2"></div>
    <div class="nk-gap"></div>

    <div class="container bigimage-pa">


        <div class="overlay">

            <div class="col-lg-6 col-md-6 col-6">
                <div class="nk-gallery-item-box d-flex p-5">
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=hEBwwpuhZJE&list=PLAesaVcVIgNKrXF62NhqWbBZ6MscjgdMl"></div>
                </div>

            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <div class="title">
                    <h3 class="blink">VR PARANORMAL ACTIVITY</h3>
                </div>
                <div class="details">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi possimus delectus, perspiciatis autem nesciunt tempora non aperiam perferendis molestias, quam dicta nulla temporibus repellat velit qui eveniet rem nobis incidunt!
                </div>
            </div>

        </div>

    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap"></div>

    <div class="container bigimage-mx">


        <div class="overlay">

            <div class="col-lg-6 col-md-6 col-6">
                <video class="video-size" controls>
                    <source src="assets/images/about/monthsary-post/monthsary-photos/mission.x.MOV" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <div class="title">
                    <h3 class="blink">MISSION X</h3>
                </div>
                <div class="details">
                MissionX, a competitive multiplayer FPS VR game that will turn your play area into a shared-space, free-roaming VR Arena. With MissionX, you can create a fun and active gaming arena for friends and family right in your backyard, warehouse, basketball court, office lobby, or go to VR Arcades, VR Arenas near you to participate in MissionX VR eSports Tournaments.
                </div>
            </div>

        </div>

    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap"></div>

    <div class="container bigimage-ars">


        <div class="overlay">

            <div class="col-lg-6 col-md-6 col-6">
            <video class="video-size" controls>
                    <source src="assets/images/about/monthsary-post/monthsary-photos/ars.MOV" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <div class="title">
                    <h3 class="blink">AR SNIPER</h3>
                </div>
                <div class="details">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi possimus delectus, perspiciatis autem nesciunt tempora non aperiam perferendis molestias, quam dicta nulla temporibus repellat velit qui eveniet rem nobis incidunt!
                </div>
            </div>

        </div>

    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap"></div>

    <div class="container bigimage-fa">


        <div class="overlay">

            <div class="col-lg-6 col-md-6 col-6">
                <video class="video-size" controls>
                    <source src="assets/images/about/monthsary-post/monthsary-photos/fps.arena.MOV" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <div class="title">
                    <h3 class="blink">FPS ARENA</h3>
                </div>
                <div class="details">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi possimus delectus, perspiciatis autem nesciunt tempora non aperiam perferendis molestias, quam dicta nulla temporibus repellat velit qui eveniet rem nobis incidunt!
                </div>
            </div>

        </div>

    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap"></div>

    <div class="container bigimage-vt">


        <div class="overlay">

            <div class="col-lg-6 col-md-6 col-6">
            <div class="nk-gallery-item-box d-flex p-5">
                    <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=hEBwwpuhZJE&list=PLAesaVcVIgNKrXF62NhqWbBZ6MscjgdMl"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <div class="title">
                    <h3 class="blink">VR TEAM</h3>
                </div>
                <div class="details">
                How To Play? Players use VR firearm to interact: press the trigger to fire, swing down the shooting gun to reload. When health point becomes zero, the player falls down and waits for reviving. Games will be over until all players fall down. Super Trilling & Exciting
The disgusting monster is right before players, makes you feel terrified. Doomsday/Eve theme, makes you feel like you are at the end of the world. Fight against the powerful enemy, makes you feel like a super soldier. Multiplayer Interactive Immersive Shooting Arena
Multiplayer VR Shooting Arena for HTC VIVE, Virtual Reality Matrix Space, Implement 4VS4 battle mode, The world`s leading multiplayer online solution that can be commercialized and implemented!
                </div>
            </div>

        </div>

    </div>
    <div class="nk-gap-2"></div>
    <div class="nk-gap"></div>

    <div class="container bigimage-vsr">


        <div class="overlay">

            <div class="col-lg-6 col-md-6 col-6">
                <video class="video-size" controls>
                    <source src="assets/images/about/monthsary-post/monthsary-photos/vr.team.MOV" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-6 col-md-6 col-6">
                <div class="title">
                    <h3 class="blink">VR ESCAPE ROOM</h3>
                </div>
                <div class="details">
                    Compared to a traditional real-life escape room, Virtual Reality Escape Rooms give players endless possibilities and larger-than-life experiences which are just not possible in a brick-and-mortar escape room.
                    Imagine crawling through ventilation tunnels, stopping giant fan blades to get through them safely, using a rope trolley to get through a flooded cave, or climbing up through the inside of an ancient temple!
                    Our Virtual Reality (VR) Escape rooms are not video games: they are an intuitive experience made for everyone, from 14 to 100 years old. If you know how to talk, listen, walk, and grab objects, you have all the skills needed to play VR! The experiences are non-violent and mainly focused on cooperation between players.
                    You and your team of 2-6 players will need to work together to find the clues, solve the puzzles and escape the VR experience within a given time limit! This experience is completely safe while offering unrivaled excitement and fun. You are not locked in anywhere and can walk and move around freely in the designated playing area.
                    An incredible and exciting activity for dates, family days out, and team building.
                </div>
            </div>

        </div>

    </div>










    <!-- END NEW SECTIONS -->


    <div class="nk-gap-4"></div>
    <!-- START: Footer -->
    <?php include_once("footer.php"); ?>
    <!-- END: Footer -->
    </div>
    <!-- START: Page Background -->
    <?php include_once("intro/start-page-bg.php"); ?>
    <!-- END: Page Background -->

    <!-- START: Search Modal -->
    <?php include_once("intro/start-search-modal.php"); ?>
    <!-- END: Search Modal -->

    <!-- START: Login Modal -->
    <?php include_once("intro/start-login-modal.php"); ?>
    <!-- END: Login Modal -->

    <!-- START: Scripts -->
    <?php include_once("scripts.php"); ?>
    <!-- END: Scripts -->
</body>

</html>
<?php include_once("php/close.php"); ?>
<style>



</style>