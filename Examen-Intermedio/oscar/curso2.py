def masLarga(l1,l2):
    if len(l1) < len(l2):
        return l1
    else:
        return l2

nombre1='pepe'
nombre2='chirizo'
res=masLarga(nombre1,nombre2)



lista=['oscar costero','eeeeeeeeee','uygftesruk']

def letrasE(lista):
    count=0
    for lista2 in lista:
        for letra in lista2:
            if letra == 'e':
                count += 1
    return count
#print(letrasE(lista))

def vocales(lista):
    count=0
    for lista2 in lista:
        for letra in lista2:
            if letra == 'a' or letra == 'e' or letra == 'i' or letra == 'o' or letra == 'u':
                lista='-'
    return lista        
                

print(vocales(lista))   

#ufdsteasrdyufgiop