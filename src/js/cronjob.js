var $this;

$(document).on("click", ".cronjob-widget", function(){
   $this=$(this);
   var value=$this.val();

    var valid_cron = /^((\d{1,2}|\*)\s){4}(\d{1,2}|\*)$/

   if(valid_cron.test($this.val())) {
       var initial=$this.val();
   } else {
       var initial="* * * * *";
   }

    $("#cronjob-modal").modal('show');
    $("#crongen").html("<div id='cron-generator'></div><div><br>Oppure componi manualmente il cronjob:<input type='text' id='manual-cron' class='form-control'></div>");

    $("#manual-cron").on("change", function () {
        $this.val($(this).val());
    });

    $('#cron-generator').cron({
        initial: initial,
        onChange: function() {
            $this.val($(this).cron("value"));
            $("#manual-cron").val($(this).cron("value"));
        }
    });

    $("#manual-cron").val(value);
});

$(document).on("click", '.close-cronjob', function () {
    $this.val($("#manual-cron").val());
    $("#cronjob-modal").modal('hide');
});

