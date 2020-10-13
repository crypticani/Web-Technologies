function ifelse(i){
    if(i<0)
    {
        document.writeln("Negative <br>")
    }
    else
    {
        if(i%3==0 && i%5==0)
        {
            document.writeln("fizzbuzz <br>")
        }
        else if (i%3 == 0)
        {
            document.writeln("fizz <br>")
        }
        else if (i%5 == 0)
        {
            document.writeln("buzz <br>")
        }
        else
        {
            document.writeln(i, "<br>")
        }
    }
}
function swtch(n){
    switch(n)
    {
        case 1: document.write("one <br>")
        break
        case 2: document.write("twp <br>")
        break
        case 3: document.write("three <br>")
        break
        case 4: document.write("four <br>")
        break
        default: document.write(n, "<br>")
    }

}