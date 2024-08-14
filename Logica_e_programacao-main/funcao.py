l1=[]
l2=[]
total=0
acumulado=0
with open (r'Analise.txt','r') as dado:
    for i in dado:
        i.rstrip()
        l1.append(i.rstrip()) if i.rstrip() not in l1 else l1
        l2.append(i.rstrip())
print("ANALISE")
print("Um exemplar de cada ocorrencia", l1)
print("Ordem decrescente:",sorted(l2, reverse=True))
for i in l1:
    print(i, '=', l2.count(i))
    total += l2.count(i)
print('Ocorrencias | Frequencia% | Freq uencia% acumuladolada')
for i in l1:
    freq=(l2.count(i)/total)*100 
    acumulado+=freq 
    print(f'{i}  | {l2.count(i)} | {freq}% | {acumulado}%')

