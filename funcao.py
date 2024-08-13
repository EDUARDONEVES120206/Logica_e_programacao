lista1 = []
lista2 = []
total=0
with open("Analise.txt", "r") as Dado:
    for i in Dado:
        i.rstrip() 
        lista1.append(i.rstrip()) if i.rstrip() not in lista1 else lista1
        lista2.append(i.rstrip())
print(lista1)
print(sorted(lista2, reverse=True))
for i in lista1:
    print(i, '=', lista2.count(i))
    total += lista2.count(i)
print(total)