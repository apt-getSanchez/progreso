import java.awt.*;
import java.applet.*;

public class Caminar extends Applet implements Runnable{
	Image fotogramas[][];
	java.util.List<DibujoAnimado> dibujos;
	String elementos[] = {"Guerrillero/g", "Hampon/h", "Vaquero/v"};
	Thread animacion;
	Image fondo;
	Image imagen;
	Graphics noseve;
    public void init() {
    	imagen = createImage(900, 900);
    	noseve = imagen.getGraphics();
    	fotogramas = new Image[3][4];
    	fondo = getImage(getCodeBase(), "Guerrillero/dust2.jpg");
    	for(int i=0; i<3; i++)
    		for(int j=0; j<4; j++)
    			fotogramas[i][j] = getImage(getCodeBase(), elementos[i] + (j+1) + ".gif");
    	dibujos = new java.util.ArrayList<DibujoAnimado>();
		for(int i=0; i<10; i++)
			dibujos.add(new DibujoAnimado(fotogramas));
    }
    
    public void start(){
    	animacion = new Thread(this);
    	animacion.start();
    }
    
   	public void paint(Graphics g){
    	noseve.setColor(Color.black);
    	noseve.drawImage(fondo, 0,0,this.getWidth(), this.getHeight(), this);
    	g.drawImage(fondo, 0, 0,this.getWidth(), this.getHeight(), this);
    	for(int i=0; i<dibujos.size(); i++)
    		dibujos.get(i).dibujar(noseve, this);
    	g.drawImage(imagen, 0, 0, this);
    }
    
    public void update(Graphics g){
    	paint(g);
    }
    
    public void run(){
    	while(true){
			for(int i=0; i<dibujos.size(); i++)
    			dibujos.get(i).actualizar();
			repaint();
    		try{
    			Thread.sleep(50);
    		}catch(InterruptedException e){};
    	}
    }
    
    public boolean mouseDown(Event ev, int x, int y){
    	boolean match = false;
    	for(int i=0; i<dibujos.size(); i++)
    		if(dibujos.get(i).contains(x, y)){
    			if(dibujos.get(i).getVectActual() == DibujoAnimado.VAQUERO)
    				dibujos.remove(i);
    			else
    				dibujos.get(i).setVectActual(dibujos.get(i).getVectActual()+1);
    				match = true;}
    			
    			if(!match)
    				dibujos.add(new DibujoAnimado(fotogramas));	
    	return true;
    }
}
