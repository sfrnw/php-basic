<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // ������ true?
// ��������� ��������� ��������, ��� ��������� �����
    var_dump((int)'012345');     // ������ 12345?
// ������ ���� ��������� � ���� integer, �� ���� �����
    var_dump((float)123.0 === (int)123.0); // ������ false?
// ��������� ��������� �������� � �����, � ��� ��� ������ � ������ � �����
    var_dump((int)0 === (int)'hello, world'); // ������ true?
// ��� ���������� � ����� ������ ��� ����� ����� 0
?>
