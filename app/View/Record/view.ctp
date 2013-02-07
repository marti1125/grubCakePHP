<div id="content" class="xfluid">

    <div class="portlet x9">

        <div class="portlet-header"><h4>Grabacion</h4></div>

        <div class="portlet-content">

            <?php //echo $this->Html->media('record/' . $record['Record']['fileSource'], array('controls', 'id' => 'record'), array('fullBase' => true, 'text' => 'Fallback text')); ?>

            <?php //echo $this->Html->script('app'); ?>

            <?php //echo $this->Form->button('Audio', array('type' => 'button', 'id' => 'btnAudio')); ?>                      

            <div id="jquery_jplayer_1" class="jp-jplayer"></div>

            <div id="jp_container_1" class="jp-audio">
                <div class="jp-type-single">
                    <div class="jp-gui jp-interface">
                        <ul class="jp-controls">
                            <li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
                            <li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
                            <li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
                            <li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
                            <li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
                            <li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
                        </ul>
                        <div class="jp-progress">
                            <div class="jp-seek-bar">
                                <div class="jp-play-bar"></div>
                            </div>
                        </div>
                        <div class="jp-volume-bar">
                            <div class="jp-volume-bar-value"></div>
                        </div>
                        <div class="jp-time-holder">
                            <div class="jp-current-time"></div>
                            <div class="jp-duration"></div>

                            <ul class="jp-toggles">
                                <li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
                                <li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
                            </ul>
                        </div>
                    </div>                    
                    <div class="jp-no-solution">
                        <span>Update Required</span>
                        To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                    </div>
                </div>
            </div>
            <br/>
            <div id="jp_container_1" class="jp-audio"><div class="jp-type-single"><div class="jp-current-time"></div></div></div>
            <br/>
            <div id="porcentaje"></div><br/>
            <div id="current"></div>
        </div>

    </div>
    <script>
        $(document).ready(function() {

            $("#repeat-on").click(function() {
                $("#jquery_jplayer_1").bind($.jPlayer.event.ended + ".jp-repeat", function(event) { // Using ".jp-repeat" namespace so we can easily remove this event
                    $(this).jPlayer("play"); // Add a repeat behaviour so media replays when it ends. (Loops)
                });
                return false;
            });

            $("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) { // Add a listener to report the time play began
                $("#current").text("Play began at time = " + event.jPlayer.status.currentTime);
            });
            $("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) { // Add a listener to report the time play began
                $("#porcentaje").text("Duración = " + event.jPlayer.status.duration);
            });

            $("#jquery_jplayer_1").jPlayer({
                ready: function(event) {
                    $(this).jPlayer("setMedia", {
                        oga: "http://localhost/cakephpsqlserv/app/webroot/files/record/<?php echo $record['Record']['fileSource'] ?>"
                    });
                },                
                swfPath: "js",
                supplied: "m4a, oga",
                wmode: "window"
            });
        });

    </script>

</div>