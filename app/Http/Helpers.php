<?php

if (! function_exists('stringToArray')) {
    function stringToArray($separator,$values)
    {
        $arrayValues= [];
        $values=explode($separator,$values);

        foreach ($values as $value)
        {
            array_push($arrayValues,trim($value));
        }

        return $arrayValues;
    }
}

if (! function_exists('responseToStore')){
    function responseToStore($value)
    {
        if($value){
            return response()->json([
                'message' => 'Create succesfully',
            ], 201);
        }
        return response()->json([
            'message' => 'Error to create'
        ], 500);
    }
}