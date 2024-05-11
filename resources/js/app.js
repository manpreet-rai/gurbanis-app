require('./bootstrap');

document.addEventListener('DOMContentLoaded', function() {
    if($('#audio-player').length) {
        new GreenAudioPlayer('#audio-player');
        $('.play-pause-btn__icon').attr('fill', '#4F5B93')
        $('.volume__speaker').attr('fill', '#4F5B93')
    }
});
