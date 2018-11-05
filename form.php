<?php

// Add Shortcode
function form_shortcode() {
    
    ?> 
    <form action="">
        <select id="test1" name=""> 
            <option value="yes"></option>
        </select>
    </form>
    <?php
}
add_shortcode( 'TwentyQuestions', 'form_shortcode' );