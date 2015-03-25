/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function validateRequire(id) {
    value = $("#"+id).val();
    if (!value || value.length == 0) {
        return "<p> " + id + " cannot be blank. </p>\n";
    } else {
        return "";
    }
}

function validateEmail(id) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test($("#"+id).val())) {
        return "<p>" + id + " is not a valid email.</p>\n";
    } else {
        return "";
    }
}

function validateDate(id) {
    if (!Date.parse($("#"+id).val())) {
        return "<p>" + id + " is not a valid date.</p>\n";
    } else {
        return "";
    }
}

function validatePassword(id1, id2) {
    if ($("#"+id1).val() != $( "#"+id2).val() ) {
        return "<p>" + id1 + " and " + id2 + " is not the same passwords.</p>\n";
    } else {
        return "";
    }
}