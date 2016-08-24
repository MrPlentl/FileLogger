/**
 * Created by bplentl on 9/17/2014.
 */

$( document ).ready(function() {
    // Initial Ajax Setup
    $.ajaxSetup({ url: "ajax_log2file_response.php",  type: "GET" });

    // Log all Text box entries

    $( "input[type=text]" ).blur(function() {
        if ($(this).attr('id').substring(0, 2) == "X_") {
            $.ajax(
                {
                    data: {
                        history_log: "User Entry  -> " + "[" + $(this).attr('id') + "]" + " => ** Not Tracking **"
                    }
                })

        } else if ($(this).attr('id').substring(0, 2) == "CC" || $(this).attr('id').substring(0, 3) == "Acc") {
            $.ajax(
                {
                    data: {
                        history_log: "User Entry  -> " + "[" + $(this).attr('id') + "]" + " => ****" + $(this).val().slice(-4)
                    }
                })

        } else {
            $.ajax(
            {
                data: {
                    history_log: "User Entry  -> " + "[" + $(this).attr('id') + "]" + " => " + $(this).val()
                }
            })
        }
    });
    // Log all Button Clicks
    $( "input[type=button]" ).click(function(){ $.ajax({ data: {history_log:"User Click  -> " + "["+$(this).attr('id')+"]" + " => " + $(this).val()}})});
    // Log all Checkbox Clicks
    $( "input[type=checkbox]" ).change(function(){ $.ajax({ data: {history_log:"User Select -> " + "["+$(this).attr('id')+"]" + " Checked => " + $(this).prop('checked')}})});
    // Log all Radio Button change
    $( "input[type=radio]" ).change(function(){$.ajax({data: {history_log:"User Select -> " + "["+$(this).attr('id')+"]" + " Radio Selected => " + $(this).prop('checked')}})});
    // Log all Checkbox Clicks
    $( "select" ).change(function(){$.ajax({data: {history_log:"User Select -> " + "["+$(this).attr('id')+"]" + " Drop Down Selected => " + $("option:selected", this).text()}})});
});

function History(log_data) {
    $.ajax({ data: {history_log:log_data} });
}