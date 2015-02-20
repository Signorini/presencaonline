<?php

function prefix_view() {
    //return 'mobile';
    $detect = new Mobile_Detect;

    if ($detect->isMobile()) {
        return 'mobile';
    }

    return 'desktop';
}

function is_desktop() {
    if(prefix_view()=='desktop') {
        return true;
    }

    return false;
}

function is_mobile() {
    if(prefix_view()=='mobile') {
        return true;
    }

    return false;
}