<?php

function getStatus($status) {
    switch ($status) {
        case 0: return "Open";
        case 1: return "Closed";
    }
}