function cookies(){
    x = navigator.cookieEnabled
    document.write("Cookies enabled: ", x, "<br>")
}
function appname(){
    y = navigator.appName
    document.write("Application name: ", y, "<br>")
}
function appcodename(){
    y = navigator.appCodeName
    document.write("Application code name: ", y, "<br>")
}
function engine(){
    y = navigator.product
    document.write("Browser engine: ", y, "<br>")
}
function version(){
    y = navigator.appVersion
    document.write("Browser version: ", y, "<br>")
}
function agent(){
    y = navigator.userAgent
    document.write("Browser agent: ", y, "<br>")
}
function platform(){
    y = navigator.platform
    document.write("Browser platform: ", y, "<br>")
}
function language(){
    y = navigator.language
    document.write("Browser language: ", y, "<br>")
}
function online(){
    y = navigator.onLine
    document.write("Is browser online? : ", y, "<br>")
}
function java(){
    y = navigator.javaEnabled()
    document.write("Is java enabled? : ", y, "<br>")
}