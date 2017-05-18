import java.awt.*;
import java.applet.*;

public class Puzzle extends Applet {
    Image imagenes[];
	Thread animacion;
	Image imagen;
	Image fondo;
	Graphics noseve; 
	Pieza activa;
	java.util.List<Pieza> piezas;
	Rectangle hueco[][];
		
    public void init() {
    	imagen = createImage(900, 600);
    	fondo = getImage(getCodeBase(), "directorioImagenes/mapamundi3.png");
    	imagenes = new Image[26];
    	hueco = new Rectangle[5][5];
    	for(int i=0; i<25; i++)
    			imagenes[i] = getImage(getCodeBase(), "directorioImagenes/" + (i+1) + ".png");
    	piezas = new java.util.ArrayList<Pieza>();
    	noseve = imagen.getGraphics();
    	for(int i=0; i<26; i++)
			piezas.add(new Pieza(imagenes[i],i));
		for(int i=0; i<5; i++)
			for(int j=0; j<5; j++)
				hueco[i][j]= new Rectangle((i*60+46),(j*60+46),60,60);
    }
    
    
    public void paint(Graphics g){	
    			
 	noseve.setColor(Color.black);
    noseve.fillRect(0, 0, 900, 600);
    noseve.drawImage(fondo, 10, 10, this);
    for(int i=0; i<imagenes.length; i++)
    	piezas.get(i).dibujar(noseve, this);
    /*for(int i=0; i<5; i++)
		for(int j=0; j<5; j++){
			noseve.setColor(Color.red);
			noseve.drawRect((i*60+10),(j*60+10),60,60);}*/

    g.drawImage(imagen, 0, 0, this);
    }
    
    public void update(Graphics g){
    	paint(g);
    }
    
    public boolean mouseDown(Event ev, int x, int y){
    	
    		for(int i=0; i<piezas.size(); i++)
    			if(piezas.get(i).contains(x, y)){
    				activa=piezas.get(i);
    			}
    	return true;
    }
    
     public boolean mouseUp(Event ev, int x, int y){
     	if (activa!=null){
     	for(int i=0; i<5; i++)
			for(int j=0; j<5; j++){
			if (hueco[i][j].intersects(activa))
				if(activa.posicion ==(j*5+i)){
					activa.setX(hueco[i][j].x);
    				activa.setY(hueco[i][j].y);
    				repaint();
    				activa.setColocada();}
			}	
     	}
    	activa=null;
	   	return true;
    }
    public boolean mouseDrag(Event ev, int x, int y){		  	
    	if (activa.colocada!=true){
    	for(int i=0; i<piezas.size(); i++)
    		if((piezas.get(i).contains(x, y))){
    			activa.setX(x);
    			activa.setY(y);
    			repaint();	
    		}}
    	return true;
    }
}
    
    
