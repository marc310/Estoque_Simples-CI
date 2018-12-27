$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#but_salvar').click(function(){
        // Pega os valores dos inputs e coloca nas variáveis
        var servicos_id = $('#servicos_id').val();
        var os_id = $('#os_id').val();
        var descricaoServ = $('#descricaoServ').val();
        var subTotal = $('#subTotal').val();



        // Método post do Jquery
        $.post('<?php echo base_url();?>os/adicionarServico', {
            servicos_id:servicos_id,
            os_id:os_id,
            descricaoServ:descricaoServ,
            subTotal:subTotal
        }, function(resposta){
            // Valida a resposta
            if(resposta == 1){
                // Limpa os inputs
                $('input, textarea').val('');
                alert('Registrado com sucesso.');
            }else {
                alert(resposta);
            }
        });
        return false;
    });
});
