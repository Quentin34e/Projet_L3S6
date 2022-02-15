package test;

public class Test1 {

	private int A = 1;
	private int B = 2;
	
	
	public Test1()
	{
		this.A = A;
		this.B = B;
		
	}


	public int getA() {
		return A;
	}


	public void setA(int a) {
		A = a;
	}


	public int getB() {
		return B;
	}


	public void setB(int b) {
		B = b;
	}
	
	public String toString() {
		return "resultat" + getA() + getB();
	}
}
