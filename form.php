<?php

// Add Shortcode
function form_shortcode() {
    ?> 
    <form method="post" action="/wp-content/plugins/twentyquestions/process-form.php" id="twentyquestions-form">
    <?php wp_nonce_field( 'twentyquestions_submit', 'twentyquest_generate_nonce' );?>
        <div class="questions-main">
            <div id="question-1"  class="question">
                <h4>Did you ever lose time from work or school due to gambling?</h4>
                <input type="radio" id="q-one-yes" name="question1" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-one-no" name="question1" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-2"  class="question">
                <h4>Has gambling ever made your home life unhappy?</h4>
                <input type="radio" id="q-two-yes" name="question2" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-two-no" name="question2" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-3"  class="question">
                <h4>Did gambling affect your reputation?</h4>
                <input type="radio" id="q-three-yes" name="question3" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-three-no" name="question3" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-4"  class="question">
                <h4>Have you ever felt remorse after gambling?</h4>
                <input type="radio" id="q-four-yes" name="question4" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-four-no" name="question4" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-5"  class="question">
                <h4>Did you ever gamble to get money with which to pay debts or otherwise solve financial difficulties?</h4>
                <input type="radio" id="q-five-yes" name="question5" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-five-no" name="question5" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-6"  class="question">
                <h4>Did gambling cause a decrease in your ambition or efficiency?</h4>
                <input type="radio" id="q-six-yes" name="question6" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-six-no" name="question6" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-7"  class="question">
                <h4>After losing, did you feel you must return as soon as possible and win back your losses?</h4>
                <input type="radio" id="q-seven-yes" name="question7" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-seven-no" name="question7" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-8"  class="question">
                <h4>After a win, did you have a strong urge to return and win more?</h4>
                <input type="radio" id="q-eight-yes" name="question8" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-eight-no" name="question8" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-9"  class="question">
                <h4>Did you often gamble until your last dollar was gone?</h4>
                <input type="radio" id="q-nine-yes" name="question9" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-nine-no" name="question9" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-10"  class="question">
                <h4>Did you ever borrow to finance your gambling?</h4>
                <input type="radio" id="q-ten-yes" name="question10" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-ten-no" name="question10" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-11"  class="question">
                <h4>Have you ever sold anything to finance gambling?</h4>
                <input type="radio" id="q-eleven-yes" name="question11" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-eleven-no" name="question11" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-12"  class="question">
                <h4>Were you reluctant to use "gambling money" for normal expenditures?</h4>
                <input type="radio" id="q-twelve-yes" name="question12" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-twelve-no" name="question12" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-13"  class="question">
                <h4>Did gambling make you careless of the welfare of yourself and your family?</h4>
                <input type="radio" id="q-thirteen-yes" name="question13" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-thirteen-no" name="question13" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-14"  class="question">
                <h4>Did you ever gamble longer than you had planned?</h4>
                <input type="radio" id="q-fourteen-yes" name="question14" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-fourteen-no" name="question14" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-15"  class="question">
                <h4>Have you ever gambled to escape worry or trouble?</h4>
                <input type="radio" id="q-fifteen-yes" name="question15" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-fifteen-no" name="question15" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-16"  class="question">
                <h4>Have you ever committed, or considered committing, an illegal act to finance gambling?</h4>
                <input type="radio" id="q-sixteen-yes" name="question16" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-sixteen-no" name="question16" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-17"  class="question">
                <h4>Did gambling cause difficulty in sleeping?</h4>
                <input type="radio" id="q-seventeen-yes" name="question17" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-seventeen-no" name="question17" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-18"  class="question">
                <h4>Do arguments, disappointments or frustrations create within you an urge to gamble?</h4>
                <input type="radio" id="q-eightteen-yes" name="question18" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-eightteen-no" name="question18" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-19"  class="question">
                <h4>Did you ever have an urge to celebrate any good fortune by a few hours of gambling?</h4>
                <input type="radio" id="q-nineteen-yes" name="question19" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-nineteen-no" name="question19" value="no" class="messageCheckbox" required>No</input>
            </div>
            <div id="question-20"  class="question">
                <h4>Have you ever considered self destruction or suicide as a result of your gambling?</h4>
                <input type="radio" id="q-twenty-yes" name="question20" value="yes" class="messageCheckbox" required>Yes</input>
                <input type="radio" id="q-twenty-no" name="question20" value="no" class="messageCheckbox" required>No</input>
            </div>
        </div>
        <div class="opptional">
            <label for="option">Could you answer other optional questions so we can help you?</label>
            <select name="option" id="selectOption">
                <option value="yes">Yes</option>
                <option value="no" selected="selected">No</option>
            </select>
        </div>
        <div id="questions-opt">
            <div id="question-twentyone" class="question">
                <h4>Types of Gambling</h4>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="bingo">Bingo</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="cards">Cards</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="poker">Casino - Poker</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="slots">Casino - Slots</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="table">Casino - Table Games</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="dice">Dice</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="horse">Horse Racing</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="internet">Internet Gambling</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="lotteries">Lotteries</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="sports">Sports Betting</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="stocks">Stockmarket</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="video">Video Machines</input>
                <input type="checkbox" id="twentyone" name="gambtype[]" value="other">Other</input>
            </div>
            <div id="question-twentytwo" class="question">
                <label for="prefered">Gambling of Choice</label>
                <select name="prefered" id="prefered">
                    <option value="N/A" selected="selected">Gambling of Choice</option>
                    <option id="twentytwo-bingo">Bingo</option>
                    <option id="twentytwo-cards">Cards</option>
                    <option id="twentytwo-poker">Casino - Poker</option>
                    <option id="twentytwo-slots">Casino - Slots</option>
                    <option id="twentytwo-table">Casino - Table Games</option>
                    <option id="twentytwo-dice">Dice</option>
                    <option id="twentytwo-horse">Horse Racing</option>
                    <option id="twentytwo-internet">Internet Gambling</option>
                    <option id="twentytwo-lotteries">Lotteries</option>
                    <option id="twentytwo-sports">Sports Betting</option>
                    <option id="twentytwo-stock">Stockmarket</option>
                    <option id="twentytwo-video">Video Machines</option>
                    <option id="twentytwo-other">Other</>
                </select>
            </div>
            <div id="questions-twentythree" class="question">
                <label for="county">County</label>
                <select name="county" id="county">
                    <option value="N/A" selected="selected">County</option>
                    <option value="Morris">Morris</option>
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
                    <option value="N/A" selected="selected">Age</option>
                    <option value="under18">18 and Under</option>
                    <option value="19to25">19-25</option>
                    <option value="26to55">26-55</option>
                    <option value="56over">56-Over</option>
                </select>
            </div>
            <div id="question-twentyfive" class="question">
                <label for="race">Race</label>
                <select name="race" id="race">
                    <option selected="selected" value="N/A">Race</option>
                    <option value="caucasian" selected="selected">Caucasian</option>
                    <option value="african">African American</option>
                    <option value="hispanic">Hispanic</option>
                    <option value="asian">Asian</option>
                    <option value="native">Native American</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div id='questions-twentysix' class='gender'>
                <label for='gender'>Gender</label>
                <select name="gender" id="gender">
                    <option value="N/A" selected="selected">Gender</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                </select>
            </div>
        </div>
        <input type="submit" name="submit_form" id="submit" value="submit">
    </form>
    <?php
}
add_shortcode( 'TwentyQuestions', 'form_shortcode' );