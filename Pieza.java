import java.awt.*;
import java.applet.*;
public class Pieza extends Rectangle{
	Image imagen;
	int imgActual = 0;
	int posicion;
	boolean colocada=false;
    public Pieza(Image imgs,int pos) {
    	super((int)(Math.random() * 400)+360, (int)(Math.random() * 540), 60, 60);
    	imagen = imgs;
    	posicion=pos;
    }
    
    public void dibujar(Graphics gg, Applet a){
    	gg.drawImage(imagen, x, y, width, height, a);
    }   
    
    public void setColocada(){
		colocada=true;
		
	}	
    
    public void setX(int posx){
		x = posx-35;
		
	}
	public void setY(int posy){
		y = posy-35;
		
	}
}