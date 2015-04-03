Attribute VB_Name = "Module1"
Public Function f(a3&, a2&, a1&, a0&, x As Double) As Double
f = x * x * x * a3 + x * x * a2 + x * a1 + a0
End Function

Public Function solve(a3&, a2&, a1&, a0&, b2&, b1&, b0&, it&) As Double
If it = 1 Then
    solve = 0
Else
    Dim x As Double
    x = solve(a3, a2, a1, a0, b2, b1, b0, it - 1)
    solve = x - f(a3, a2, a1, a0, x) / f(0, b2, b1, b0, x)
End If
End Function

Sub Main()
Dim result As String
Dim a3&, a2&, a1&, a0&
result = InputBox("3차항 2차항 1차항 상수항 입력 (공백으로 구분)")
a3 = Split(result, " ")(0)
a2 = Split(result, " ")(1)
a1 = Split(result, " ")(2)
a0 = Split(result, " ")(3)

Dim b2&, b1&, b0&
b2 = a3 * 3
b1 = a2 * 2
b0 = a1

MsgBox solve(a3, a2, a1, a0, b2, b2, b0, 1000)

End Sub
