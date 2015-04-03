Attribute VB_Name = "Module1"
Public Function f#(x#)
f = Sqr(4 - x * x)
End Function


Sub Main()
Dim k&
Dim a#, b#, n#, h#, x#, s#, sum#
Dim inp As String
inp = InputBox("integration section [a, b] ?")
a = Split(inp, " ")(0)
b = Split(inp, " ")(1)

n = 50
h = (b - a) / n
x = a
s = 0

For k = 1 To n - 1
    x = x + h
    s = s + f(x)
Next k

sum = h * ((f(a) + f(b)) / 2 + s)
MsgBox ("   /" & b & "|  sqrt(4-x*x) = " & sum & " /" & a)

End Sub
