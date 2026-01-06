<?php
    system("cls");
    print("Input a count of elements in array:\r\n");
    $nElems = intval(chop(fgets(STDIN)));
    if ($nElems == 0) 
    {
        echo "";
        fgetc(STDIN);
        exit(1);
    }
    $iNumbers = array();
    srand();
    echo("Generating array by filling " . $nElems . " elements\r\n");
    for ($i = 0; $i < $nElems; $i++)
    {
        $nItem = rand(1, 100);
        $iNumbers[] = $nItem;
        printf("%d ", $iNumbers[$i]);
    }
    $iMax = $iNumbers[0];
    $nIndex = 0;
    for ($i = 1; $i < $nElems; $i++)
    {
        if($iNumbers[$i] > $iMax)
        {
            $iMax = $iNumbers[$i];
            $nIndex = $i;
        }
    }
    printf("\r\nFound maximum element:%d with index %d\r\n", $iMax, $nIndex);
    fgetc(STDIN);
?>