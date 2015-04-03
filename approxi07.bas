Attribute VB_Name = "Module1"
Const LIMIT = 50
Const EPS = 0.00000001

Public Function f#(x#)
f = x * x * x - x + 1
End Function


Sub Main()
Dim low#, high#, x#
Dim k&

low = -2#
high = 2#

For k = 1 To LIMIT
    x = (low + high) / 2
    If f(x) > 0 Then
        high = x
    Else
        low = x
    End If
    If f(x) = 0 Or Abs(high - low) < Abs(low) * EPS Then
        MsgBox "x=" & x
        Exit For
    End If
Next k
If k > LIMIT Then MsgBox "divergent"
End Sub
