<?php

// Add Shortcode
function form_shortcode() {
    
    ?> 
    <form method="post" action="/wp-content/plugins/twentyquestions/process-form.php">
        <div class="questions-main">
            <div id="question-1"  class="question">
                <h4>Did you ever lose time from work or school due to gambling?</h4>
                <input type="checkbox" id="q-one-yes" name="q-one-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-one-no" name="q-one-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-2"  class="question">
                <h4>Has gambling ever made your home life unhappy?</h4>
                <input type="checkbox" id="q-two-yes" name="q-two-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-two-no" name="q-two-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-3"  class="question">
                <h4>Did gambling affect your reputation?</h4>
                <input type="checkbox" id="q-three-yes" name="q-three-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-three-no" name="q-three-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-4"  class="question">
                <h4>Have you ever felt remorse after gambling?</h4>
                <input type="checkbox" id="q-four-yes" name="q-four-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-four-no" name="q-four-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-5"  class="question">
                <h4>Did you ever gamble to get money with which to pay debts or otherwise solve financial difficulties?</h4>
                <input type="checkbox" id="q-five-yes" name="q-five-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-five-no" name="q-five-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-6"  class="question">
                <h4>Did gambling cause a decrease in your ambition or efficiency?</h4>
                <input type="checkbox" id="q-six-yes" name="q-six-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-six-no" name="q-six-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-7"  class="question">
                <h4>After losing, did you feel you must return as soon as possible and win back your losses?</h4>
                <input type="checkbox" id="q-seven-yes" name="q-seven-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-seven-no" name="q-seven-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-8"  class="question">
                <h4>After a win, did you have a strong urge to return and win more?</h4>
                <input type="checkbox" id="q-eight-yes" name="q-eight-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-eight-no" name="q-eight-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-9"  class="question">
                <h4>Did you often gamble until your last dollar was gone?</h4>
                <input type="checkbox" id="q-nine-yes" name="q-nine-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-nine-no" name="q-nine-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-10"  class="question">
                <h4>Did you ever borrow to finance your gambling?</h4>
                <input type="checkbox" id="q-ten-yes" name="q-ten-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-ten-no" name="q-ten-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-11"  class="question">
                <h4>Have you ever sold anything to finance gambling?</h4>
                <input type="checkbox" id="q-eleven-yes" name="q-eleven-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-eleven-no" name="q-eleven-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-12"  class="question">
                <h4>Were you reluctant to use "gambling money" for normal expenditures?</h4>
                <input type="checkbox" id="q-twelve-yes" name="q-twelve-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-twelve-no" name="q-twelve-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-13"  class="question">
                <h4>Did gambling make you careless of the welfare of yourself and your family?</h4>
                <input type="checkbox" id="q-thirteen-yes" name="q-thirteen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-thirteen-no" name="q-thirteen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-14"  class="question">
                <h4>Did you ever gamble longer than you had planned?</h4>
                <input type="checkbox" id="q-fourteen-yes" name="q-fourteen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-fourteen-no" name="q-fourteen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-15"  class="question">
                <h4>Have you ever gambled to escape worry or trouble?</h4>
                <input type="checkbox" id="q-fifteen-yes" name="q-fifteen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-fifteen-no" name="q-fifteen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-16"  class="question">
                <h4>Have you ever committed, or considered committing, an illegal act to finance gambling?</h4>
                <input type="checkbox" id="q-sixteen-yes" name="q-sixteen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-sixteen-no" name="q-sixteen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-17"  class="question">
                <h4>Did gambling cause difficulty in sleeping?</h4>
                <input type="checkbox" id="q-seventeen-yes" name="q-seventeen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-seventeen-no" name="q-seventeen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-18"  class="question">
                <h4>Do arguments, disappointments or frustrations create within you an urge to gamble?</h4>
                <input type="checkbox" id="q-eightteen-yes" name="q-eightteen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-eightteen-no" name="q-eightteen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-19"  class="question">
                <h4>Did you ever have an urge to celebrate any good fortune by a few hours of gambling?</h4>
                <input type="checkbox" id="q-nineteen-yes" name="q-nineteen-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-nineteen-no" name="q-nineteen-no" value="no" class="messageCheckbox">No</input>
            </div>
            <div id="question-20"  class="question">
                <h4>Have you ever considered self destruction or suicide as a result of your gambling?</h4>
                <input type="checkbox" id="q-twenty-yes" name="q-twenty-yes" value="yes" class="messageCheckbox">Yes</input>
                <input type="checkbox" id="q-twenty-no" name="q-twenty-no" value="no" class="messageCheckbox">No</input>
            </div>
        </div>
        <div class="opptional">
            <label for="option">Could you answer other optional questions so we can help you?</label>
            <select name="option" id="option">
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="questions-opt">
            <div id="question-twentyone" class="question">
                <h4>Types of Gambling</h4>
                <input type="checkbox" id="twentyone-bingo">Bingo</input>
                <input type="checkbox" id="twentyone-cards">Cards</input>
                <input type="checkbox" id="twentyone-poker">Casino - Poker</input>
                <input type="checkbox" id="twentyone-slots">Casino - Slots</input>
                <input type="checkbox" id="twentyone-table">Casino - Table Games</input>
                <input type="checkbox" id="twentyone-dice">Dice</input>
                <input type="checkbox" id="twentyone-horse">Horse Racing</input>
                <input type="checkbox" id="twentyone-internet">Internet Gambling</input>
                <input type="checkbox" id="twentyone-lotteries">Lotteries</input>
                <input type="checkbox" id="twentyone-sports">Sports Betting</input>
                <input type="checkbox" id="twentyone-stock">Stockmarket</input>
                <input type="checkbox" id="twentyone-video">Video Machines</input>
                <input type="checkbox" id="twentyone-other">Other</input>
            </div>
            <div id="question-twentytwo" class="question">
                <label for="prefered">Gambling of Choice</label>
                <select name="prefered" id="prefered">
                    <option type="checkbox" id="twentyone-bingo">Bingo</option>
                    <option type="checkbox" id="twentyone-cards">Cards</option>
                    <option type="checkbox" id="twentyone-poker">Casino - Poker</option>
                    <option type="checkbox" id="twentyone-slots">Casino - Slots</option>
                    <option type="checkbox" id="twentyone-table">Casino - Table Games</option>
                    <option type="checkbox" id="twentyone-dice">Dice</option>
                    <option type="checkbox" id="twentyone-horse">Horse Racing</option>
                    <option type="checkbox" id="twentyone-internet">Internet Gambling</option>
                    <option type="checkbox" id="twentyone-lotteries">Lotteries</option>
                    <option type="checkbox" id="twentyone-sports">Sports Betting</option>
                    <option type="checkbox" id="twentyone-stock">Stockmarket</option>
                    <option type="checkbox" id="twentyone-video">Video Machines</option>
                    <option type="checkbox" id="twentyone-other">Other</>
                </select>
            </div>
            <div id="questions-twentythree" class="question"></div>
                <label for="county">County</label>
                <select name="county" id="county">
                    <option value="Morris" selected="selected">Morris</option>
                    <option value="Bergen">Bergen</option>
                    <option value="Union">Union</option>
                    <option value="Middlesex">Middlesex</option>
                    <option value="Mercer">Mercer</option>
                    <option value="Burlington">Burlington</option>
                    <option value="Essex">Essex</option>
                    <option value="Somerset">Somerset</option>
                    <option value="Ocean">Ocean</option>
                    <option value="Monmouth">Monmouth</option>
                    <option value="Hunterdon">Hunterdon</option>
                    <option value="Atlantic">Atlantic</option>
                    <option value="Gloucester">Gloucester</option>
                    <option value="Warren">Warren</option>
                    <option value="Camden">Camden</option>
                    <option value="Hudson">Hudson</option>
                    <option value="Passaic">Passaic</option>
                    <option value="Cumberland">Cumberland</option>
                    <option value="Capemay">Cape May</option>
                    <option value="Salem">Salem</option>
                    <option value="Sussex">Sussex</option>
                </select>
            </div>
            <div id="question-twentyfour" class="question">
                <label for="age">Age</label>
                <select name="age" id="age">
                    <option value="under18">18 and Under</option>
                    <option value="19to25">19-25</option>
                    <option value="26to55">26-55</option>
                    <option value="56over">56-Over</option>
                </select>
            </div>
            <div id="question-twentyfive" class="question">
                <label for="race">Race</label>
                <select name="race" id="race">
                    <option value="caucasian" selected="selected">Caucasian</option>
                    <option value="african">African American</option>
                    <option value="hispanic">Hispanic</option>
                    <option value="asian">Asian</option>
                    <option value="native">Native American</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div id='questions-twentysix' class='radio'>
                <label for='radio-gender'>Sex</label>
                <div class='radio-input'>
                    <input id='radio-1' type="radio">
                    <label for="radio-1">Male</label>
                </div>
                <div class='radio-input'>
                    <input id='radio-2' type="radio">
                    <label for="radio-2">Female</label>
                </div>
            </div>
        </div>
        <input type="submit">
    </form>
    <?php
}
add_shortcode( 'TwentyQuestions', 'form_shortcode' );

if ( isset( $_POST['submit'] ) ){
    $q_1 = isset($_POST['q-one-yes']) ? 1 : 0;
    $q_2 = isset($_POST['q-two-yes']) ? 1 : 0;
    $q_3 = isset($_POST['q-three-yes']) ? 1 : 0;
    $q_4 = isset($_POST['q-four-yes']) ? 1 : 0;
    $q_5 = isset($_POST['q-five-yes']) ? 1 : 0;
    $q_6 = isset($_POST['q-six-yes']) ? 1 : 0;
    $q_7 = isset($_POST['q-seven-yes']) ? 1 : 0;
    $q_8 = isset($_POST['q-eight-yes']) ? 1 : 0;
    $q_9 = isset($_POST['q-nine-yes']) ? 1 : 0;
    $q_10 = isset($_POST['q-ten-yes']) ? 1 : 0;
    $q_11 = isset($_POST['q-eleven-yes']) ? 1 : 0;
    $q_12 = isset($_POST['q-twelve-yes']) ? 1 : 0;
    $q_13 = isset($_POST['q-thirteen-yes']) ? 1 : 0;
    $q_14 = isset($_POST['q-fourteen-yes']) ? 1 : 0;
    $q_15 = isset($_POST['q-fifteen-yes']) ? 1 : 0;
    $q_16 = isset($_POST['q-sixteen-yes']) ? 1 : 0;
    $q_17 = isset($_POST['q-seventeen-yes']) ? 1 : 0;
    $q_18 = isset($_POST['q-eightteen-yes']) ? 1 : 0;
    $q_19 = isset($_POST['q-nineteen-yes']) ? 1 : 0;
    $q_20 = isset($_POST['q-twenty-yes']) ? 1 : 0;
    $q_21 = isset($_POST['q-twentyone-yes']) ? 1 : 0;
    $q_22 = isset($_POST['q-twentytwo-yes']) ? 1 : 0;
}

global $wpdb;
$tablename = $wpdb->prefix.'form_submission';

$wpdb->insert( $tablename, array(
'question_one' => $_POST['question_one'],
'question_two' => $_POST['question_two'],
'question_three' => $_POST['question_three'],
'question_four' => $_POST['question_four'],
'question_five' => $_POST['question_five'],
'question_six' => $_POST['question_six'],
'question_seven' => $_POST['question_seven'],
'question_eight' => $_POST['question_eight'],
'question_nine' => $_POST['question_nine'],
'question_ten' => $_POST['question_ten'],
'question_eleven' => $_POST['question_eleven'],
'question_twelve' => $_POST['question_twelve'],
'question_thirteen' => $_POST['question_thirteen'],
'question_fourteen' => $_POST['question_fourteen'],
'question_fifteen' => $_POST['question_fifteen'],
'question_sixteen' => $_POST['question_sixteen'],
'question_seventeen' => $_POST['question_seventeen'],
'question_eightteen' => $_POST['question_eightteen'],
'question_nineteen' => $_POST['question_nineteen'],
'question_twenty' => $_POST['question_twenty'],
'question_twentyone' => $_POST['question_twentyone'],
'question_twentytwo' => $_POST['question_twentytwo'],
'question_twentythree' => $_POST['question_twentythree'],
'question_twentyfour' => $_POST['question_twentyfour'],
'question_twentyfive' => $_POST['question_twentyfive'],
'question_twentysix' => $_POST['question_twentysix'],
'question_twentyseven' => $_POST['question_twentyseven'],),
   array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ) 
);