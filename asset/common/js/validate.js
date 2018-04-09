//pr: parent of validate control | flg: true(agreement with 1 row all empty), false: default case
function validate(pr,flg){
    var valid = true;
    if(flg===true){
        $("input,select,textarea",pr).each(function(k,v){
            var c = vRequired(v.value,v);
            flg &= !c;
        });
        if(flg){
            return valid;
        }
    }
    
    $("input[v-required],select[v-required],textarea[v-required]",pr).each(function(k,v){
        var c = vRequired(v.value,v);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    
    if(!valid)
        return valid;
    
    $("input[v-email],select[v-email],textarea[v-email]",pr).each(function(k,v){
        var c = vEmail(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-url],select[v-url],textarea[v-url]",pr).each(function(k,v){
        var c = vUrl(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-date],select[v-date],textarea[v-date]",pr).each(function(k,v){
        var c = vDate(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-date-iso],select[v-date-iso],textarea[v-date-iso]",pr).each(function(k,v){
        var c = vDateIso(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-number],select[v-number],textarea[v-number]",pr).each(function(k,v){
        var c = vNumber(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-digits],select[v-digits],textarea[v-digits]",pr).each(function(k,v){
        var c = vDigits(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-min-length],select[v-min-length],textarea[v-min-length]",pr).each(function(k,v){
        var m = $(v).attr("v-min-length");
        var c = vMinLength(v.value,v,m);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-max-length],select[v-max-length],textarea[v-max-length]",pr).each(function(k,v){
        var m = $(v).attr("v-max-length");
        var c = vMaxLength(v.value,v,m);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-range-length],select[v-range-length],textarea[v-range-length]",pr).each(function(k,v){
        var m = $(v).attr("v-range-length").split(",");
        var c = vRangeLength(v.value,v,m);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-min],select[v-min],textarea[v-min]",pr).each(function(k,v){
        var m = $(v).attr("v-min");
        var c = vMin(v.value,m);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-max],select[v-max],textarea[v-max]",pr).each(function(k,v){
        var m = $(v).attr("v-max");
        var c = vMax(v.value,m);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-range],select[v-range],textarea[v-range]",pr).each(function(k,v){
        var m = $(v).attr("v-range").split(",");;
        var c = vRange(v.value,m);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    $("input[v-time],select[v-time],textarea[v-time]",pr).each(function(k,v){
        var c = vTime(v.value);
        if(!c)
            $(v).addClass("v-error");
        else
            $(v).removeClass("v-error");
        valid &= c;
    });
    if(!valid)
        return valid;
    
    return valid;
}

function checkable(a) {
    return /radio|checkbox/i.test(a.type);
}
function getLength(b, c) {
    switch (c.nodeName.toLowerCase()) {
        case "select":
            return $("option:selected", c).length;
        case "input":
            if (checkable(c)) return $("input[name='"+c.name+"']:checked").length
    }
    return b.length;
}
//b: value | c: element
function vRequired(b, c){
    if ("select" === c.nodeName.toLowerCase()) {
        var e = $(c).val();
        return e && e.length > 0;
    }
    return this.checkable(c) ? this.getLength(b, c) > 0 : b.length > 0;
}
function vEmail(a){
    return (a=="") || /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(a);
}
function vUrl(a){
    return (a=="") || /^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[\/?#]\S*)?$/i.test(a);
}
function vDate(a){
    return (a=="") || !/Invalid|NaN/.test(new Date(a).toString());
}
function vDateISO(a){
    return (a=="") || /^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(a);
}
function vNumber(a){
    return (a=="") || /^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(a);
}
function vDigits(a){
    return (a=="") || /^\d+$/.test(a);
}
//b: value | c: element | d: min length number
function vMinLength(b,c,d){
    var e = Array.isArray(b) ? b.length : this.getLength(b, c);
    return e >= d;
}
//b: value | c: element | d: max length number
function vMaxLength(b,c,d){
    var e = Array.isArray(b) ? b.length : this.getLength(b, c);
    return e <= d;
}
//b: value | c: element | d: array[min,max]
function vRangeLength(b, c, d) {
    var e = Array.isArray(b) ? b.length : this.getLength(b, c);
    return e >= d[0] && e <= d[1];
}
//a: value | c: min value (number only)
function vMin(a, c) {
    return (a=="") || a >= c;
}
//a: value | c: max value (number only)
function vMax(a, c) {
    return (a=="") || a <= c;
}
//a: value | c: array[min,max] (number only)
function vRange(a, c) {
    return (a=="") || (a >= c[0] && a <= c[1]);
}
function vTime(a){
    return (a=="") || /^(?:(?:([01]?\d|2[0-3]):)([0-5]?\d))$/.test(a);
}