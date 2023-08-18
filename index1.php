<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="css/jquery.pagepiling.css" />
</head>

<?php
include 'head.php';
?>

<body>
    <div id="pagepiling">
        <div class="section">
            <video width="100%" height="100%" autoplay muted onended="goToNextSection()">
                <source src="images/sliderimg/135658 (1080p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="section">
            <video width="100%" height="100%" autoplay muted onended="goToNextSection()">
                <source src="images/sliderimg/jellyfish_-_110877 (Original).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="section">
            <video width="100%" height="100%" autoplay muted onended="goToNextSection()">
                <source src="images/sliderimg/mountains_-_31175 (1080p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="section">
            <video width="100%" height="100%" autoplay muted onended="goToNextSection()">
                <source src="images/sliderimg/star_-_6962 (1080p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="section lastvideo">
            <video width="100%" height="100%" autoplay muted onended="goToNextSection()">
                <source src="images/sliderimg/mountains_-_31175 (1080p).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/jquery.pagepiling.js"></script>
    <script>
        var $j = jQuery.noConflict();
        $j(document).ready(function () {
            $j("#pagepiling").pagepiling({
                onLeave: function (index, nextIndex, direction) {
                    var currentVideo = $j('#pagepiling .section').eq(index - 1).find('video')[0];
                    currentVideo.pause(); // Pause the video when leaving the section
                },
                afterLoad: function (anchorLink, index) {
                    var currentVideo = $j('#pagepiling .section').eq(index - 1).find('video')[0];
                    currentVideo.play(); // Play the video when loading the section
                },
                afterRender: function () {
                    var currentVideo = $j('#pagepiling .section').eq(0).find('video')[0];
                    currentVideo.play(); // Play the first video on page load
                }
            });
        });

        function goToNextSection() {
            var currentSectionIndex = $j('#pagepiling .section.active').index();
            $j.fn.pagepiling.moveSectionDown();
        }
    </script>
    <?php
    include 'script.php';
    ?>
</body>

</html>