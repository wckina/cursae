/**
 * Theme: Ubold Admin Template
 * Author: Coderthemes
 * Form Advanced
 */

//Bootstrap-MaxLength
$('input#defaultconfig').maxlength()

$('input#thresholdconfig').maxlength({
    threshold: 20
});

$('input#moreoptions').maxlength({
    alwaysShow: true,
    warningClass: "label label-success",
    limitReachedClass: "label label-danger"
});

$('.alloptions').maxlength({
    alwaysShow: true,
    warningClass: "label label-purple",
    limitReachedClass: "label label-danger",
    separator: ' de ',
    preText: 'Você digitou ',
    postText: ' caracteres disponíveis.',
    validate: true
});

$('textarea#textarea').maxlength({
    alwaysShow: true
});

$('input#placement').maxlength({
    alwaysShow: true,
    placement: 'top-left'
});