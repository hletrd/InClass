Attribute VB_Name = "Module1"
Public Function mysqrt(s As Double) As Double
Dim EPS  As Double
EPS = 0.00000001
Dim x2 As Double, x1 As Double
x1 = 1#

Dim k As Long
Dim complete As Boolean
complete = False

For k = 1 To 20
x2 = 0.5 * (x1 + s / x1)
If Abs(x1 - x2) < EPS * Abs(x2) Then
    mysqrt = x2
    complete = True
    Exit For
End If
x1 = x2
Next k
If Not complete Then mysqrt = 0
End Function

Sub Main()
Dim x As Double
For x = 2 To 30
MsgBox x & "  " & mysqrt(x) & "  " & Sqr(x)
Next x
End Sub
