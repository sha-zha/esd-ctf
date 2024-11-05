set arg1=%1
set chemin=%2
SET STR=%arg1%
REM finds folder

cd %chemin%

:: Taking the rest of the string as it is as we don't need to change that.
    set "restStr=%STR:~1,20%"
:: Taking the first character of the string and doing it to upper case.
    set upper=
    set "str=%STR:~0,1%"
    for /f "skip=2 delims=" %%I in ('tree "\%str%"') do if not defined upper set "upper=%%~I"
    set "upper=%upper:~3%"

IF NOT EXIST %upper%%restStr% (     

    md %upper%%restStr%
    cd %upper%%restStr%

    set fichierJS=%arg1%.js
    set contenuJS=^
    import('./%upper%%restStr%Controller.js')^
    
    ^
    
    echo %contenuJS% > %fichierJS%
    echo "class %upper%%restStr%Controller {} " >"%upper%%restStr%Controller.js"
echo Fichier JavaScript "%fichierJS%" créé avec succès.
goto :fin

:fin
pause
)