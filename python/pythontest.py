import numpy as np
import matplotlib.pyplot as plt


d= -0.04 #this could be negative
g= 0.02
n= 0.01

s= 0.15
a= 0.33
l= 0.25

#capital = np.linspace (0,5,100)

#capital=[i]
i = 0
capital= [0.01]


def E_D(d,g,n,capital):
    return (d+g+n)*capital

def E_I(s,l,a,capital):
    return s*((1-l)**(1-a))*(capital**a)

#capital=[]
ED = np.array([E_D(d,g,n,capital[0])])
EI = np.array([E_I(s,l,a,capital[0])])
#i=0

epsilon = 1



while np.any(abs(EI[i]-ED[i]))> epsilon:
    i += 1
    capital= np.append(capital, i)
    ED= np.append(ED, E_D(d, g, n, capital[i]))
    EI= np.append(EI, E_I(s, l, a, capital[i]))

plt.plot(capital, ED)
plt.plot(capital, EI)
plt.show()