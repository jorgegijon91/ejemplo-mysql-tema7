
Vagrant.configure("2") do |config|
  
  config.vm.box = "ubuntu/xenial64"
  
  config.vm.network "private_network", ip "192.168.50.55"

  config.vm.provision "shell", inline: <<-SHELL

  #Generar archivo sql con los registros de empleados
  echo "-- Insertar datos de ejemplo en la tabla 'empleados'" > /home/vagrant/datos_empleados.sql
  echo "INSERT INTO gestion_empleados.empleados(nombre, apellido, edad, salario, departamento) VALUES" >> /home/vagrant/datos_empleados.sql
  echo "('Juan', 'Pérez', 30, 2500.00, 'Ventas')," >> /home/vagrant/datos_empleados.sql   #SHIFT ALT CURSO ABAJO-->Duplico
  echo "('Manolo', 'Pérez', 40, 2000.00, 'Desarrollo')," >> /home/vagrant/datos_empleados.sql
  echo "('Lucía', 'Pérez', 50, 1000.00, 'Ventas')," >> /home/vagrant/datos_empleados.sql
  echo "('Teresa', 'Pérez', 10, 2400.00, 'Marketing')," >> /home/vagrant/datos_empleados.sql
  echo "('Pepito', 'Martínez', 5, 2500.00, 'Ventas')" >> /home/vagrant/datos_empleados.sql
 

  SHELL

  
end
