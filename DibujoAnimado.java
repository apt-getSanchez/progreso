/**
 * @(#)DibujoAnimado.java
 *
 *
 * @author 
 * @version 1.00 2017/3/14
 */

import java.awt.*;
import java.applet.*;
public class DibujoAnimado extends Rectangle{
	public static final int GUERRILLERO = 0;
	public static final int HAMPON = 1;
	public static final int VAQUERO = 2;
	Image imagenes[][];
	private int vectActual = GUERRILLERO;
	int imgActual = 0;
    public DibujoAnimado(Image imgs[][]) {
    	super((int)(Math.random()* 700),(int)(Math.random()* 700),150,200);
    	imagenes = imgs;
    }
    
    public int getVectActual(){
    	return vectActual;
    }
    
    public void setVectActual(int va){
    	vectActual = va;
    }
    
    public void dibujar(Graphics gg, Applet a){
    	gg.drawImage(imagenes[vectActual][imgActual],x,y,width,height,a);
    }
  
  public void actualizar() {
  		imgActual = (imgActual+1)%imagenes[vectActual].length;
  }
    
}