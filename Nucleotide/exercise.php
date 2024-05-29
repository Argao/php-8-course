<?php
declare(strict_types=1);
//Nucleotide Count
//Each of us inherits from our biological parents a set of chemical instructions known as DNA that influence how our bodies are constructed. All known life depends on DNA!
//
//Note: You do not need to understand anything about nucleotides or DNA to complete this exercise.
//
//DNA is a long chain of other chemicals, and the most important are the four nucleotides, adenine, cytosine, guanine and thymine. A single DNA chain can contain billions of these four nucleotides, and the order in which they occur is important! We call the order of these nucleotides in a bit of DNA a "DNA sequence."
//
//We represent a DNA sequence as an ordered collection of these four nucleotides, and a common way to do that is with a string of characters such as "ATTACG" for a DNA sequence of 6 nucleotides. 'A' for adenine, 'C' for cytosine, 'G' for guanine, and 'T' for thymine.
//
//                                                                                                                                                                                                                                                                 Given a string representing a DNA sequence, count how many of each nucleotide are present.
//
//For example:
//
//"GATTACA" -> 'A': 3, 'C': 1, 'G': 1, 'T': 2
//In addition, please convert the nucleotideCount method to a static method.

class DNA {
    public static function nucleotideCount(string $input): array
    {
        $arr = [
            'A' => 0,
            'C' => 0,
            'G' => 0,
            'T' => 0
        ];

        $result = count_chars($input,1);

        foreach ($result as $key => $val){
            $arr[chr($key)] = $val;
        }

        return $arr;
    }



    public static function nucleotideCountCourseSolution(string $input): array
    {
        return  [
            'A' => substr_count($input, 'A'),
            'C' => substr_count($input, 'C'),
            'G' => substr_count($input, 'G'),
            'T' => substr_count($input, 'T')
        ];

    }
}




