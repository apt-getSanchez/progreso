import java.awt.*;
import java.applet.*;

public class Casilla extends Rectangle{
	public static final int DIM = 100;
	Color letras[]={Color.black,Color.white};
	Color fondos[]=;
	private Image imagen;
    public Casilla() {
    
    }

    public void dibujar(Graphics g, Applet a){
		if(descubierta)
			g.drawImage(imagen, x, y, width, height, a);
		else
			g.drawImage(reverso, x, y, width, height, a);
    }
    
}