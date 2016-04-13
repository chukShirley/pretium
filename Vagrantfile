#!/usr/bin/bash

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |c|

  c.vm.define "pretium.chukShirley", primary: true do |config|
    config.vm.box = "ubuntu/trusty64"

    config.vm.hostname = "pretium.chukShirley"
    config.vm.network "private_network", ip: "192.168.33.10"

    config.vm.provider "virtualbox" do |vb|
      vb.memory = "3072"
    end

    # Run Ansible directly on guest
    config.vm.provision :shell,
      :keep_color => true,
      :inline => "export PYTHONUNBUFFERED=1 && export ANSIBLE_FORCE_COLOR=1 && bash /vagrant/vm-provisioning/init.sh"

  end
end
