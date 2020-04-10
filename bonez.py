##sqlite3.connect(database,[,timeo])
## import nltk
##from nltk.book import *
dognames = []
dogmoney = []
dogbones = 0
username = input("Please type your name ")
usermoney = int(input("How much money do you have "))
dognames.append(username)
dogmoney.append(usermoney)
totaldogmoney = sum(dogmoney)
##print(dognames)
##print(totaldogmoney)
numbone = int(input("Hey " + username + ", how many bones do you want to buy?"))
dogbones = numbone
##print(dogbones)
costofeachbone = int(input("Hey " + username + ", how much are each of these bones worth?"))
totalbonecost = (numbone * costofeachbone)
while totaldogmoney < (totalbonecost):
    print("Sorry not enough money. we have, ",totaldogmoney,"and we need",(totalbonecost))
    newdog = input("What is the name of more dogs?")
    dognames.append(newdog)
    newdogmoney = int(input("How much money does " + newdog + ", have?"))
    dogmoney.append(newdogmoney)
    newdogbonez = int(input("How many bones does " + newdog + ", want?"))
    dogbones = dogbones + newdogbonez
    totaldogmoney = sum(dogmoney) 
    totalbonecost = totalbonecost + (newdogbonez * costofeachbone)                    
    ##print(dogbones)
    ##print(totalbonecost)
else:
    print("Great we have, " , totaldogmoney , " and we need " , (totalbonecost))

print(dogbones)
bonesleft = (dogbones)
happy = input("You have " + str(bonesleft) + " bones Do you want to give away bones to your dog friends?  Enter yes or No...")
if happy == 'yes':
    ##print("there are," dognames)
    bonegets = input("Who get's bonez?")
    bonegetter = int(input("how many bonesz should " + bonegets + " get?"))
    if bonegetter > bonesleft:
        print("Sorry not enough bonez")
    else:
        bonesleft = (bonesleft - bonegetter)
        ##print(bonegets)
        ##print(dogbones)
        ##print(bonegetter)
        ##print(bonesleft)
        if bonesleft <= 0:
            print("No bonez left")
        else:
            happy = input("You have, " + str(bonesleft) + " bones, do you want to give away more bones?")
else:
    print("Great, you get " + str(bonesleft) + " bones...I guess we're all happy") 


        
