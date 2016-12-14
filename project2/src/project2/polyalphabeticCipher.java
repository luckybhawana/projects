package project2;

import java.io.*;
import java.util.*;

//Bhawana Gautam
//COSC472

public class polyalphabeticCipher 
{
 char vignereTable[][]= new char[26][26];
public void GenereatePad() {
 
char alpharray[] = new char[26];
char c = 'a';

for(int x=0;x<26;x++){
 alpharray[x] = c;
 c++;
 }
 
int i,j,k;
i = 0;
while(i < 26)
{
    k = i;
    for (j=0;j<26;j++)
    {
        if (k>=26)
            k = 0;
        vignereTable[i][j] = alpharray[k++]; 
    }
    i++;
}
 
} 
 
private String key;
public polyalphabeticCipher(String k)
{
    key = k;
}
public String encrypt(String plainText)
{
    char[] plainTextArr = plainText.toCharArray();
    while(key.length()<plainText.length())
    {
        key += key;
    }
    key = key.substring(0,plainText.length());
    System.out.println(key);
    char [] keyArray = key.toCharArray();
    String cipherText = "";
    for(int i=0; i<plainText.length();i++)
    {
        int rowpos = keyArray[i]-'a';
        int colpos = plainTextArr[i]-'a';
        cipherText += vignereTable[rowpos][colpos];
    }
    return cipherText;
 
}
public String decrypt(String cipherText)
{
    String plainText = "";
    char[] cipherTextArr = cipherText.toCharArray();
    char [] keyArray = key.toCharArray();
    char [] plainTextArr = new char[keyArray.length];
    for(int i=0; i<keyArray.length; i++)
    {
        int rowpos = keyArray[i] - 'a';
        int cipherpos = new String(vignereTable[rowpos]).indexOf(cipherTextArr[i]);
        plainTextArr[i] = vignereTable[0][cipherpos];
    }
    plainText = new String(plainTextArr);
    return plainText;
}
 

public static void main(String args[])
{
    Scanner console = new Scanner(System.in);
    System.out.println("Enter a text key:");
    String keyText = console.nextLine();
    polyalphabeticCipher algo = new polyalphabeticCipher(keyText);
    algo.GenereatePad();
    System.out.println("Enter the plain text");
    String plainText = console.nextLine();
    
    String cipherText = algo.encrypt(plainText);
    System.out.println("The Encrypted message: "+cipherText);
    System.out.println("");
    plainText = algo.decrypt(cipherText);
    System.out.println("The Decrypted message: "+plainText);
}

 
}

