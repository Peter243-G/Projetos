
nome = input("Digite seu nome:")
print('Bem-vindo' + nome + "\n")

# Variável de loop
run = True

# Looping de inicialização
while run:
    escolha = int(input("Operações:\n 1)Soma\n 2)Subtração\n 3)Multiplicação\n 4)Divisão\n 5)Sair\n >>"))
    #Verificando a escolha de operação
    if escolha <= 0 or escolha > 5:
        run = False
        print("Operação inválida!")

    elif escolha == 5:
        run = False
        print("Obrigado por participar.\n Até mais!")

    else:
        # Variáveis dos valores de operação
        num1 = float(input("Coloque o primeiro valor:"))
        num2 = float(input("Coloque o segundo valor:"))

        def somar(x, y):
            return x + y

        def subtrair(x, y):
            return x - y

        def multiplicar(x, y):
            return x * y

        def dividir(x, y):
            return x / y
        if escolha == 1:
            soma = somar(num1, num2)
            print("A soma é: ", soma)
        elif escolha == 2:
            subtracao = subtrair(num1, num2)
            print("A subtração é: ", subtracao)
        elif escolha == 3:
            multiplicacao = multiplicar(num1, num2)
            print("A multiplicação é: ", multiplicacao)
        elif escolha == 4:
            divisao = dividir(num1, num2)
            print('A divisão é: ', divisao)
