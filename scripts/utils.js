function commandPopUp(URL, height, width) {
    var poptop = window.outerHeight/2 - height/2;
    var popleft = window.screenX + window.outerWidth/2 - width/2;
    
    window.open(URL,'_blank','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,top=' + poptop + ',left=' + popleft + ',width=' + width + ',height=' + height);
}