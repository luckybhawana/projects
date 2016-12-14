package project2;

import java.util.Scanner;

//Bhawana Gautam
//COSC472

public class MonoalphabeticCipher {
	
		public static char p[] = { 'a','b','c','d','e','f','g','h','i','j',
									'k','l','m','n','o','p','q','r','s','t','u','v',
									'w','x','y','z'};
		public static char ch[] = { 'z','e','b','r','a','s','c','d','f','g','h','i','j',
									'k','l','m','n','o','p','q','t','u','v','w','x','y'};
		public static String doEncryption(String s)
		{
			char c[] = new char[(s.length())];
			
			for(int i = 0; i < s.length(); i ++)
			{
				for(int j = 0; i < 26; j++)
				{
					if(p[j] == s.charAt(i))
					{
						c[i] = ch[j];
						break;
					}
				}
			}
			return (new String(c));
		}
		
		public static String doDecryption(String s)
		{
			char p1[] = new char[(s.length())];
			
			for(int i = 0; i < s.length(); i++)
			{
				for(int j = 0; j < 26; j++)
				{
					if(ch[j] == s.charAt(i))
					{
						p1[i] = p[j];
						break;
					}
				}
			}
			return (new String (p1));
		}
		
		
		public static void main(String args[])
		{
			Scanner sc = new Scanner(System.in);
			
			System.out.println("Please enter the message: ");
			String en = doEncryption(sc.next().toLowerCase());
			System.out.println("");
			System.out.println("Encrypted message: " + en);
			System.out.println("");
			System.out.println("Decrypted message: " + doDecryption(en));
			sc.close();
		}
		
		
}

