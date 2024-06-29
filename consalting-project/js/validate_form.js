$(document).ready(function (){

    $("form").submit(function (event){
        event.preventDefault();
        let inputId = ['name', 'email', 'phone', 'select'];
        let inputValue = [{}];
        let error = 0;
         inputValue =  getValueInput(inputId);
         error = checkInput(inputValue, error);
        console.log(error);
        if(error == 0){
            $("form").unbind('submit').submit();
            $('form')[0].reset();

        }
    });





     function  checkInput(inputValue){
        let error = 0;
        for (var id in inputValue){
            if(inputValue[id] == ""){
                $('#' + id).addClass("error");
                error++;
            } else {
                $('#' + id).removeClass("error");
            }
        }
            return error;
    };


    function getValueInput(inputId){
        let inputValue = {};
        inputId.forEach((id,  i) => {
        inputValue[id] = $('#' + id).val();
        });
        return inputValue;
    };


});