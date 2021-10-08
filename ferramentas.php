<?php

function mostra_data_normal($data){
    $dataDividida = explode('-',$data);

    return $dataDividida[2].'/'.$dataDividida[1].'/'.$dataDividida[0];
}

function mostra_estado($uf)
{
    switch ($uf) {
        case 'AC':
            return 'Acre';
            break;
        case 'AL':
            return 'Alagoas';
            break;
        case 'AP':
            return 'Amapá';
            break;
        case 'AM':
            return 'Amazonas';
            break;
        case 'BA':
            return 'Bahia';
            break;
        case 'CE':
            return 'Ceará';
            break;
        case 'DF':
            return 'Distrito Federal';
            break;
        case 'ES':
            return 'Espírito Santo';
            break;
        case 'GO':
            return 'Goiás';
            break;
        case 'MA':
            return 'Maranhão';
            break;
        case 'MT':
            return 'Mato Grosso';
            break;
        case 'MS':
            return 'Mato Grosso do Sul';
            break;
        case 'MG':
            return 'Minas Gerais';
            break;
        case 'PA':
            return 'Pará';
            break;
        case 'PB':
            return 'Paraíba';
            break;
        case 'PR':
            return 'Paraná';
            break;
        case 'PE':
            return 'Pernambuco';
            break;
        case 'PI':
            return 'Piauí';
            break;
        case 'RJ':
            return 'Rio de Janeiro';
            break;
        case 'RN':
            return 'Rio Grande do Norte';
            break;
        case 'RS':
            return 'Rio Grande do Sul';
            break;
        case 'RO':
            return 'Rondônia';
            break;
        case 'RR':
            return 'Roraima';
            break;
        case 'SC':
            return 'Santa Catarina';
            break;
        case 'SP':
            return 'São Paulo';
            break;
        case 'SE':
            return 'Sergipe';
            break;
        case 'TO':
            return 'Tocantins';
            break;
    }
}

function mostra_telefone($telefone){
    $padrao = '/([0-9]{2})+([0-9]{4,5})+([0-9]{4})/';
    $verifica = preg_match($padrao,$telefone);

    if(!$verifica){
        return $telefone;
    }

    $telPartido = preg_split($padrao,$telefone,-1,PREG_SPLIT_DELIM_CAPTURE);


    return '('.$telPartido[1].') '.$telPartido[2].'-'.$telPartido[3];

}