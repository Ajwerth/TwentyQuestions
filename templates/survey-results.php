<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();


$queryURL = parse_url( html_entity_decode( esc_url( add_query_arg( $arr_params ) ) ) );
parse_str( $queryURL['query'], $getVar );
$surveyResults = $getVar['survey-results'];

if($surveyResults >= 7){

?>

<div class="wrapper">
    <div class="results">
        <h1>Results</h1>
            
        <p>You have answered <span class="number-yes"><?php echo $surveyResults ?></span> questions with 'Yes' as your response. Most compulsive gamblers will answer Yes to
        at least 7 questions. Your answers indicate that you may have a serious gambling problem and should seek help today.</p>

        <strong>New Jersey Visitors:</strong>
        G<p>amblers Anonymous meetings in New Jersey (searchable by county) by following this link. New Jersey residents can also locate area compulsive gambling counselors and treatment programs at this link. Remember, for immediate confidential help with a gambling problem, call the New Jersey Helpline at 1-800-GAMBLER.</p>

        <strong>Out of State Visitors:</strong>
        <p>For help finding Gamblers Anonymous meetings in your state please visit http://www.gamblersanonymous.org/. For additional information and professional help in your state please visit our affiliate list.
        Give us a call: 800-GAMBLER</p>

        <?php } else { ?>

        <p>You have answered Yes to <?php echo $surveyResults ?> out of 20 questions. Our studies show you do not have a gambling problem.</p>
    </div>
</div>

<?php
};

get_footer();